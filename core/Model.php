<?php

namespace PHPFramework;

/**
 * Обработка данных от пользователей в наследниках надо указать массив $fillable что должно быть!
 */
abstract class Model{
    public array $fillable = [];                                //Разрешенные для записи данные
    public array $attributes = [];                              //данные которые пойдут в БД или дальше отрабатывать
    protected array $rules = [];                                //Правила валидации
    protected array $labels = [];                                //Имена полей
    protected array $errors = [];                               //Ошибки валидации
    protected array $rules_list = ['required','min','max'];     //Правила валидации
                                                                //Тексты валидационных ошибок (:fieldname:-плайсхолдер)
    protected array $messages = [
        'required' => 'Поле :fieldname: обязательно для заполнения.',
        'min' => 'Поле :fieldname: должно быть минимум :rulevalue: символов',
        'max' => 'Поле :fieldname: должно быть максимум :rulevalue: символов',
    ];

    /**
     * Проверка пришедших данных и заполнение необходимых
     * @return void
     */
    public function loadData():void{
        $data = request()->getData();
        foreach($this->fillable as $value){
            if(isset($data[$value])){
                $this->attributes[$value] = $data[$value];
            }else{
                $this->attributes[$value] = '';
            }
        }
    }

    /**
     * Валидация, проверка по указанным правилам $rules
     * @return void
     */
    public function validate(): bool {
        foreach ($this->attributes as $fieldname => $value){
            if(isset($this->rules[$fieldname])){
                $this->check([
                    'fieldname'=>$fieldname,
                    'value'=>$value,
                    'rules'=>$this->rules[$fieldname]
                ]);
            }
        }
        return !$this->hasErrors();
    }

    protected function check(array $field):void{
        foreach($field['rules'] as $rule => $rule_value){
            if (in_array($rule, $this->rules_list)){
                if(!call_user_func_array([$this, $rule], [$field['value'], $rule_value])){
                    $this->addError(
                        $field['fieldname'],
                        str_replace(
                            [':fieldname:',':rulevalue:'],
                            [$this->labels[$field['fieldname']] ?? $field['fieldname'], $rule_value],
                            $this->messages[$rule]
                        )
                    );
                }
            }
        }
    }
    protected function addError($fielName, $error):void{
        $this->errors[$fielName][] = $error;
    }
    public function getErrors(){
        return $this->errors;
    }
    protected function hasErrors(): bool{
        return !empty($this->errors);
    }
    protected function required($value, $rule_value):bool{
        return !empty(trim($value));
    }
    protected function min($value, $rule_value):bool{
        return mb_strlen($value, 'UTF-8') >= $rule_value;
    }
    protected function max($value, $rule_value):bool{
        return mb_strlen($value, 'UTF-8') <= $rule_value;
    }
    protected function email($value, $rule_value):bool{
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}
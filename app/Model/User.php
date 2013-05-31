<?php
class User extends AppModel {
    public $name = 'User';
    public $validate = array(
        'email' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'An Email is required'
            ),
            'email' => array(
                'rule' => array('email'),
                'message' => 'Email is invalid'
            ),
            'isUnique' => array(
                'rule' => array('isUnique'),
                'message' => 'Email is already in use'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            ),
            'checkPassword' => array(
                'rule' => array('checkPassword', 'confirm_password'),
                'message' => 'Passwords do not Match'
            )
        ),
        'confirm_password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Repeat password is required'
            )
        ),
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('admin', 'author')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
            )
        )
    );

    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }
        return true;
    }

    public function checkPassword($data, $confirm_password) {
        if (!isset($this->data[$this->alias][$confirm_password])) {
            return true;
        }

        if (($data['password'] === $this->data[$this->alias][$confirm_password])) {
            return true;
        }
        return false;
    }
}
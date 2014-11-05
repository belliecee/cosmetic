<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;
        private $_auth;
      

	public function authenticate()
	{
		$username=strtolower($this->username);
		$user=user::model()->find('LOWER(username)=?',array($username));
		if($user===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if($user->password !== $this->validatePassword($this->password))
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
		{
			$this->_id=$user->id;
			$this->username=$user->username;
			$this->errorCode=self::ERROR_NONE;
		}
		return $this->errorCode==self::ERROR_NONE;
	}

	public function getId()
	{
		return $this->_id;
	}
        public function getUsername()
	{
		return user::model()->findByPk($this->getId())->username;
	}
        
      
        public function getAuth()
        {
            return user::model()->findByPk($this->getId())->auth;
        }
        public function validatePassword($password)
        {
            
            return $this->hashPassword($password);
        }
        public function hashPassword($password)
        {
           
            return md5($password);
        }
}


<?php
namespace Porpoise;

interface IUserProxy
{
    function getUserName($id);
    function setUserName($id, $name);
}
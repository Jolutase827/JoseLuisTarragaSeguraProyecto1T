<?php
function transformToHash($pwd){
    return password_hash($pwd, PASSWORD_DEFAULT);
}
function verifyPwd($pwd, $hash){
    return password_verify($pwd, $hash);
}
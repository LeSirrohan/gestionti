<?php
$usuario=$_POST['usuario'];
$passwd=$_POST['clave'];

    $ldapHost = "10.20.24.5";
    $ldapPort = "8080";
    $ldapUser ="$usuario,nombredominio";
    $ldapPswd ="$passwd";

$ldapLink =ldap_connect($ldapHost, $ldapPort)
    or die("Can't establish LDAP connection");

if (ldap_set_option($ldapLink,LDAP_OPT_PROTOCOL_VERSION,3))
{
    echo "Using LDAP v3";
}else{
    echo "Failed to set version to protocol 3";
}

ldap_bind($ldapLink,$ldapUser,$ldapPswd)
    or die("Can't bind to server.");

?> 
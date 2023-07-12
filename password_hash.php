<?php
$options = [
    'cost' => 10,
];

echo password_hash("admin", PASSWORD_DEFAULT, $options);

//hasilnya :
//$2a$10$BgW/J2rLpgSCu51v.LN8F.SN4a74mcjhBrdlTMGEIp6j.wZotHOK2


<?php
$hashed = '$2a$10$BgW/J2rLpgSCu51v.LN8F.SN4a74mcjhBrdlTMGEIp6j.wZotHOK2';

if (password_verify('admin', $hashed)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}
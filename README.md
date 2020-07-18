# Laravel-Multi-Auth-Login
This Is a multi auth login system in laravel. We have created separate provider, password reset and tokensystem. use route /admin/login to login admin. Admin controller should be admin auth  and Home Controller should be User Auth. 

## Create a new admin

``` <?PHP
php artisan tinker
admin=new App\Admin
$admin->name="AA"
$admin->email="A@A.com"
$admin->password=Hash::make('AA')
$admin->save()
exit


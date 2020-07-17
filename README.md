This Is a multi auth login system in laravel. We have created separate provider, password reset and tokensystem. use route /admin/login to login admin. Admin controller should be admin auth  and Home Controller should be User Auth. to create a new admin

php artisan tinker
<br/>
admin=new App\Admin<br/>
$admin->name="Test Admin"<br/>
$admin->email="tipusultan50@gmail.com"<br/>
$admin->password=Hash::make('testpassword')<br/>
$admin->save()<br/>
exit;
# Laravel-Multi-Auth-Login

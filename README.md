# Work procedure
1.We need 5 tables (users,roles,user_role,permissions,permission_role)
2.Give relationship between users, roles table and roles, permissions table ManyToMany relationship.
3.You have to enter your permissions table data manually as per ur module  
4.I use laravel Gate Policy to create user role permission.
5.Define gate in AuthServiceProvider.php->boot()
6.To create resource policy for representative model "php artisan make:policy NamePolicy --model=Name"
7.Define your logic in policy.
8.To restrict user from accessing restricted part use condition in controller.
9.Enjoy :)

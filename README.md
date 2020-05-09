# Work procedure

1. We need 5 tables (users,roles,user_role,permissions,permission_role).
2. database sql is in db folder.
3. Give relationship between users, roles table and roles, permissions table ManyToMany relationship.
4. You have to enter your permissions table data manually as per ur module.
5. I use laravel Gate Policy to create user role permission.
6. Define gate in AuthServiceProvider.php->boot().
7. To create resource policy for representative model "php artisan make:policy NamePolicy --model=Name".
8. Define your logic in policy.
9. To restrict user from accessing restricted part use condition in controller.
10. Enjoy :)

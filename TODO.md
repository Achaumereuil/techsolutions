# TODO: Implement Session Timeout for Gestion de Parc

- [x] Add timeout constant (20 minutes) to includes/auth.php
- [x] Modify is_admin_logged_in() to check and update last activity timestamp
- [x] Modify admin_login() to set initial last activity timestamp
- [x] Modify admin_logout() to unset the timestamp
- [ ] Test the implementation by logging in and verifying logout after 20 minutes

# Rename Admin Paths <!-- omit in toc -->

This module helps secure the Drupal backend by overriding the admin path.

It provides a settings form for replacing the terms `admin` and `user` in
Drupal routes (URLs).

This can also help reduce spam from automated bots that expect Drupal sites
to have the user registration form at `/user/register`.

- To submit bug reports and feature suggestions, or to track changes:
  [issue queue](https://www.drupal.org/project/issues/rename_admin_paths).


## Table of contents

- [Table of contents](#table-of-contents)
- [Requirements](#requirements)
- [Installation](#installation)
- [Configuration](#configuration)
- [Troubleshooting](#troubleshooting)
- [Maintainers](#maintainers)


## Requirements

This module requires no modules outside of Drupal core.


## Installation

- Install the Rename Admin Paths module as you would normally install a
  contributed Drupal module. Visit
  [Installing Drupal Modules](https://www.drupal.org/docs/extending-drupal/installing-modules)
  for further information.


## Configuration

1. Navigate to `Administration > Extend` and enable the module.
2. Navigate to `Administration > Configuration > System > Rename Admin Paths`
   to configure.
3. There are options to rename the "admin" and "user" paths values.
4. Save configuration.


## Troubleshooting

## What if another module breaks after enabling this module?

The broken module probably uses hard-coded paths instead of paths generated
by the router with a route name. This is not something the Rename Admin
Paths module can fix.

Instead, open an issue in the relevant module's issue queue and request
that the module use the paths generated by the router.

### What if I forget what I renamed a path to?

Use drush: `drush cget rename_admin_paths.settings`

Or check the database: In the `config` table, check the value for column
`config` row `rename_admin_paths.settings`.


## Maintainers

- Patrick Kenny - [ptmkenny](https://www.drupal.org/u/ptmkenny)
- Raphaël Apard - [Raphael Apard](https://www.drupal.org/u/raphael-apard)
- slootjes - [Robert Slootjes](https://www.drupal.org/u/slootjes)

**Supporting organizations:**

- [Acolad Développements](https://www.drupal.org/acolad-d%C3%A9veloppements)
- [MediaMonks](https://www.drupal.org/mediamonks)

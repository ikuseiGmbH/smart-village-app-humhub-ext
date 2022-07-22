# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com),
and this project adheres to [Semantic Versioning](https://semver.org/).

## [v0.3]

Double opt-in for registration and ability to read public contents as guests

### Added

- added double opt-in process in registration
  - integrated a creation for one time codes that are mailed during registration
  - 1. `/auth/register` to enter account data
  - 2. `auth/signup` to enter one time code
- added ability to read public contents without login through API
  - guest users can read calendar, post and space data without login or bearer token

### Changed

- hid "smartvillage" from web menu

## [v0.2]

New endpoint for space membership requests, updated conversations to have a read/unread status and versioning

### Added

- added endpoint for membership requests `/space/{id}/membership/{userid}/request` to spaces
- added read/unread status of conversations with a new `/mail` that includes

  ```
    status: 'read' | 'unread',
    seen_at: '2022-05-20 11:56:27'
  ```

  with a logic to mark conversations read on calling `/mail/{id}/entries`


### Changed

- decided for versioning and increased the version form 0.1 to 0.2

### Fixed

- added privacy policy check to new `/auth/register` if legal module is installed (https://www.humhub.com/de/marketplace/legal)

## [v0.1]

Initial setup of the new module to extend functionalities of https://github.com/humhub for Smart Village App.

### Added

- added registration endpoint `/auth/register` with accepting the following mandatory fields

  ```
  {
    account: {
      username: "username",
      email: "email@email.email"
    },
    profile: {
      firstname: "firstname",
      lastname: "lastname"
    },
    password: {
      newPassword: "newPassword",
      newPasswordConfirm: "newPasswordConfirm"
    }
  }
  ```

# Secure Message App

GSecure Message App allows for secure messaging by sending encrypted messages that can only be read once by the recipient before they are automatically deleted. Messages also have a set expiration time, increasing the privacy of the communication.

## Table of Contents
- [About](#about)
- [Getting Started](#getting-started)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Usage](#usage)
- [Features](#features)
- [Contact](#contact)

## About

The GSecure Message App is designed to enhance secure communication through encryption and self-destructive messages. It's built using PHP and utilizes Composer for dependency management.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

Before you begin, ensure you have the following installed:
- PHP 8.2.4 or newer
- Composer

### Installation

1. **Clone the repository**
git clone https://github.com/waheedup74/message-app.git
2. **Navigate to the project directory**
cd message-app
3. **Install dependencies**
composer install

4. **Set up the database connection in the `.env` file**
5. **Run the database migrations**
php artisan migrate


### Usage

To start the application, run:
php artisan serve

This will start the PHP development server at `http://localhost:8000`.

## Features

- **Send Message:** Send encrypted messages that can only be read once.
- **Retrieve Message List:** Access the list of recent messages.
- **Automatic Deletion:** Messages are deleted after a set time or after being read.

## Contact

Waheed - waheedup74@gmail.com



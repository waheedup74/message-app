# GSecure Message App

## Table of Contents

- [About](#about)
- [Getting Started](#getting-started)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Usage](#usage)
- [Contact](#contact)

## About

This app allows messages to be sent in encrypted form. The recipient cannot view the message without a unique identifier and can only read it once before it's automatically deleted. Additionally, messages will be deleted after a set expiration time, determined by the sender.

## Getting Started

To get a local copy up and running, follow these simple steps.

### Prerequisites

- PHP 8.2.4
- Composer Should be installed


### Installation

1. Clone the repo
   
   git clone https://github.com/waheedup74/gaming-dashboard-vue.git
   
2. Install dependencies
   
   composer install

  After setting up database connection in .env please follow the instructions
  
  Run migration script

  php artisan  migrate



### Usage

To start the app, run:


php artisan serve


## Features

- Send Message
- Retrive Message List
- Delete Message after expiry time limit and after reading the message

## Contact

Waheed - waheedup74@gmail.com


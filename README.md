# EVENTIFY

Eventify is a cutting-edge event management platform designed to simplify event organization and attendance. Whether you're planning a conference, concert, workshop, or social gathering, Eventify has you covered!

## Installation

To set up Eventify, follow these steps:

1. **Configure Development Environment:**
   - Use Laragon as the preferred development environment. You can download it [here](https://laragon.org/index.html).

2. **Clone The Project's Repository:**
   - Clone the Eventify repository using the following command:
     ```bash
     git clone https://github.com/Zaiidmo/Eventify
     ```

3. **Install Dependencies:**
   - Install Node.js and Composer.
   - Open the command prompt from the project directory and run the following commands:
     ```bash
     npm install
     composer update
     composer dump-autoload
     ```

4. **Configure LARAVEL Environment**
   - Open the command prompt from the project directory and run the following commands:
     ```bash
     composer install
     cp .env.example .env
     php artisan key:generate
     php artisan  migrate --seed
     php artisan cache:clear
     ```
5. **Configure Mailer** 
   - Generate an app password from your  email provider (Gmail) for security reasons.
   - Go to `.env` file in the root folder of the project and edit the following lines:
    ``` bash 
    `MAIL_USERNAME=your_email@gmail.com` <br>
    `MAIL_PASSWORD=app'
    ```

## Eventify Features

- Dynamic Search and filter For Events 
- Personalized Entertainments  for each user (Customizable User Dashboard)
- Reservation System with Payment Gateway Integration
- Social Media Share Buttons on event pages
- Email Notifications to users about new events  or reservations
- Admin Panel for managing all aspects of the application including CRUD operations for Users, Events, Tickets, Orders etc.
- User authentication and profiles
- Responsive design for various devices

## Roadmap

1. Design phase, including use cases and class diagrams.
2. Jira planning for development milestones.
3. Mock-up creation.
4. Development phase.

## Tech Stack

**Client:** HTML, JavaScript, TailwindCSS

**Server:** Laravel(PHP), MySQL

## ScreenShots 
[Eventify Logo]()
<!-- [Home Page]() -->

## What do you need to do

1. After Setting Up The Environment (Steps 3-4)
You'll find that all the needed tables and data for the Project all already Created in the data base folder All you
need to do is to change the credentials in the .env file to match those in your database
2. Open The Repository Using Your Own Code Editor and Run the following commands
```bash
npm run dev
```
```bash
php artisan serve
```
#### This will start a local server on port 8000. You can access it by going to http://localhost:8000 in your web browser.
---
ENJOY EXPLORING THE MAGIC BEHIND THE SCENES 
---
## Author

- [@Zaiid-Moumni](https://github.com/Zaiidmo/)

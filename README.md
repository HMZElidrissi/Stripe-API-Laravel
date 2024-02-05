# Integrating Stripe Payments into a Laravel Application

## Description

This is a simple Laravel application that demonstrates how to integrate Stripe payments into a Laravel application.

## Installation

1. Clone the repository
2. Run `composer install`
3. Run `npm install`
4. Copy `.env.example` to `.env` and fill in your environment variables
5. enter your Stripe API keys in the `.env` (STRIPE_KEY and STRIPE_SECRET)
6. Run `php artisan key:generate` to generate an app key
7. Run `php artisan serve` to start the application

## Usage

The application has the following routes:

- `/` - The welcome page
- `/checkout` - The checkout page
- `/success` - The success page after a successful payment
- `/cancel` - The cancel page after a cancelled payment

1. click on the "checkout" button on the welcome page
2. Fill out the payment details with the test card information: 
   - Card Number: 4242 4242 4242 4242
   - Expiry Date: Any future date
   - CVC: Any 3 digits
   - ZIP: Any 5 digits
   - Country: Any country
   - Email: Any email
   - Name: Any name
3. Click on the "Pay" button
4. You will be redirected to the success page if the payment is successful, or the cancel page if the payment is cancelled.

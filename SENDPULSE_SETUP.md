# SendPulse Email Integration Setup Guide

## Overview
Your updated order form now uses **SendPulse** for automatic email delivery instead of EmailJS. This guide will help you configure the integration.

## What's Changed

### Form Enhancements:
1. ✅ **Added Quantity Selector** - Customers can now choose 1-10 boxes
2. ✅ **Dynamic Price Calculation** - Total amount updates based on quantity selected
3. ✅ **SendPulse Integration** - Professional email delivery to admin and customer
4. ✅ **Same Column Layout** - Maintains your existing 2-column form design

### Email Automation:
- **Admin Email**: Order details sent to `digital.work.3442@gmail.com`
- **Customer Email**: Order confirmation sent to customer's provided email
- **Automatic Sending**: Both emails sent automatically upon form submission

---

## Setup Instructions

### Step 1: Create SendPulse Account
1. Go to https://sendpulse.com/
2. Click "Sign Up" and create a free account
3. Verify your email address
4. Complete account setup

### Step 2: Get Your API Credentials
1. Log in to your SendPulse account
2. Go to **Settings** → **API**
3. Note down your:
   - **API User ID** (Client ID)
   - **API Secret** (Client Secret)

### Step 3: Verify Sender Email in SendPulse
1. Go to **Senders** in SendPulse dashboard
2. Add your sender email (e.g., `noreply@rnherbalindia.com`)
3. Verify the sender email (SendPulse will send a verification link)
4. Wait for verification to complete

### Step 4: Update Configuration in send-email.php
Open the file `send-email.php` and find these lines (around line 32-33):

```php
$SENDPULSE_API_USER_ID = 'YOUR_SENDPULSE_USER_ID'; // Replace with your SendPulse User ID
$SENDPULSE_API_SECRET = 'YOUR_SENDPULSE_API_SECRET'; // Replace with your SendPulse API Secret
$SENDPULSE_FROM_EMAIL = 'noreply@rnherbalindia.com'; // Replace with SendPulse verified sender email
```

Replace:
- `YOUR_SENDPULSE_USER_ID` with your API User ID
- `YOUR_SENDPULSE_API_SECRET` with your API Secret
- `noreply@rnherbalindia.com` with your verified sender email

**Important:** Keep credentials protected and never share them publicly!

### Step 5: Test the Form
1. Open your order form in a browser
2. Fill out all required fields
3. Select a quantity (2-3 to test calculation)
4. Click "PLACE ORDER NOW"
5. Check both admin and customer email inboxes for confirmation

---

## Email Templates

### Admin Notification Email
Contains:
- Customer name, phone, email
- Delivery address (full details)
- Product name and quantity
- Total amount
- Payment method

### Customer Confirmation Email
Contains:
- Order acknowledgment
- Order details summary
- What happens next (shipping timeline)
- Support contact information

---

## Server Requirements

Your hosting needs to support:
- ✅ PHP 7.1+ (most common)
- ✅ cURL extension (for API calls)
- ✅ HTTPS (recommended for security)

To verify your server setup:
1. Create a file `test-server.php` with:
```php
<?php
echo "PHP Version: " . phpversion() . "<br>";
echo "cURL Enabled: " . (extension_loaded('curl') ? 'Yes' : 'No') . "<br>";
?>
```
2. Visit it in your browser to check

---

## Troubleshooting

### "SendPulse credentials not configured" error
- Check that you replaced the placeholder credentials in `send-email.php`
- Ensure there are no extra spaces or quotes in the values

### Emails not sending
1. Check your SendPulse API credentials are correct
2. Verify the sender email is confirmed in SendPulse
3. Check your SendPulse account has email credits
4. Review error logs on your server

### Check Server Logs
If something fails, check your server error logs:
- Location varies by hosting provider
- Usually in `/var/log/php-errors.log` or control panel

---

## File Structure

```
├── order.html           (Updated with quantity selector & SendPulse code)
├── send-email.php       (Backend email handler - requires configuration)
├── script.js            (Existing animations - unchanged)
├── style.css            (Existing styles - unchanged)
└── SENDPULSE_SETUP.md   (This file)
```

---

## Security Best Practices

1. **Never commit credentials** to GitHub/version control
2. **Use environment variables** for production (if available)
3. **Keep PHP file private** - don't expose to public
4. **Use HTTPS** for your domain
5. **Validate all inputs** server-side (already done in send-email.php)

---

## SendPulse Limits (Free Plan)

- Emails per month: 15,000
- Contacts: Up to 500
- Perfect for testing and small businesses

*As your business grows, upgrade to a paid plan for higher limits*

---

## Support

If you need help:
1. Check SendPulse documentation: https://sendpulse.com/help
2. Review error messages carefully
3. Test with a simple email first
4. Contact your hosting provider for server issues

---

## Additional Features (Optional)

You can enhance this further by:
- Adding email templates with HTML formatting
- Implementing order tracking system
- Setting up automated reminders
- Adding SMS notifications via SendPulse SMS API

---

**Last Updated:** April 2, 2026
**Version:** 1.0 - SendPulse Integration

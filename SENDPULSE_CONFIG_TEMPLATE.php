<?php
/**
 * SENDPULSE CONFIGURATION TEMPLATE
 * 
 * Replace this file's content with your actual credentials
 * This is a template to help you organize your SendPulse integration
 */

// ========================================
// STEP 1: GET YOUR CREDENTIALS FROM SENDPULSE
// ========================================
// 
// 1. Log in to https://sendpulse.com/
// 2. Go to Settings → API
// 3. Copy your credentials below
//
// ========================================

// YOUR SENDPULSE API CREDENTIALS
// (Replace the placeholder values with your actual credentials)

define('SENDPULSE_USER_ID', 'YOUR_SENDPULSE_USER_ID');
// Description: Also called "Client ID" in SendPulse
// Example: 12345
// Where to find: SendPulse → Settings → API → User ID

define('SENDPULSE_API_SECRET', 'YOUR_SENDPULSE_API_SECRET');
// Description: Your API Secret/Password for authentication
// Example: abcdef123456ghijklmnop789
// Where to find: SendPulse → Settings → API → Secret

define('SENDPULSE_FROM_EMAIL', 'noreply@rnherbalindia.com');
// Description: Email address to send FROM (must be verified in SendPulse)
// Important: This email MUST be verified in SendPulse first!
// Steps to verify:
//    1. Log in to SendPulse
//    2. Go to Senders
//    3. Add new sender email
//    4. Verify via email link sent by SendPulse
//    5. Wait for verification (usually instant)

define('SENDPULSE_FROM_NAME', 'RN Herbal India');
// Description: Display name for your emails
// Example: "RN Herbal India" or "Support Team"

define('ADMIN_EMAIL', 'digital.work.3442@gmail.com');
// Description: Your admin email (where order notifications go)
// This can be same as SENDPULSE_FROM_EMAIL or different


// ========================================
// STEP 2: HOW TO FIND YOUR SENDPULSE CREDENTIALS
// ========================================
//
// Method A - API Credentials:
//   1. Login: https://sendpulse.com/dashboard
//   2. Click on "Settings" (usually at bottom left)
//   3. Navigate to "API" section
//   4. You'll see "User ID" and "Secret"
//   5. Copy both values here
//
// Method B - Create New API User (if needed):
//   1. Settings → API
//   2. Click "Create New Credentials"
//   3. Give it a name like "PHP Order Form"
//   4. Copy the generated credentials
//
// ========================================


// ========================================
// STEP 3: VERIFY SENDER EMAIL IN SENDPULSE
// ========================================
//
// IMPORTANT: Your sender email must be verified before emails will send!
//
// How to verify:
//   1. Login to SendPulse
//   2. Go to "Senders" section
//   3. Click "Add Sender"
//   4. Enter your sender email
//   5. SendPulse sends verification email
//   6. Click the verification link in that email
//   7. Now your email is verified and ready to use!
//
// ========================================


// ========================================
// STEP 4: UPDATE SEND-EMAIL.PHP
// ========================================
//
// After getting your credentials, update send-email.php:
//
// 1. Open: send-email.php
// 2. Find lines 32-34 (look for "YOUR_" placeholders)
// 3. Replace with your actual values:
//
//    From:
//    $SENDPULSE_API_USER_ID = 'YOUR_SENDPULSE_USER_ID';
//    $SENDPULSE_API_SECRET = 'YOUR_SENDPULSE_API_SECRET';
//    $SENDPULSE_FROM_EMAIL = 'noreply@rnherbalindia.com';
//
//    To:
//    $SENDPULSE_API_USER_ID = '12345';
//    $SENDPULSE_API_SECRET = 'abc123def456ghi789';
//    $SENDPULSE_FROM_EMAIL = 'your-verified-email@rnherbalindia.com';
//
// ========================================


// ========================================
// STEP 5: TEST YOUR CONFIGURATION
// ========================================
//
// After updating send-email.php:
//
// 1. Open your order form in browser
// 2. Fill out ALL fields with test data
// 3. Select quantity: 2 (to test calculation)
// 4. Click "PLACE ORDER NOW"
// 5. Wait 5-10 seconds for processing
//
// Expected Results:
//   ✓ Success message appears
//   ✓ Check your admin email (digital.work.3442@gmail.com)
//   ✓ Check the customer email (whatever email you entered in form)
//   ✓ Both should have received emails within 1 minute
//
// If emails don't arrive:
//   - Check spam/junk folder
//   - Check browser console (F12) for JavaScript errors
//   - Review send-email.php error log (contact your host)
//   - Verify credentials are correct in send-email.php
//   - Ensure sender email is verified in SendPulse
//
// ========================================


// ========================================
// SENDPULSE FREE PLAN FEATURES
// ========================================
//
// You can get started completely FREE with SendPulse:
//
// ✓ 15,000 emails per month (more than enough!)
// ✓ Unlimited contacts
// ✓ Full API access
// ✓ Professional email templates
// ✓ Delivery tracking
// ✓ No credit card required to start
//
// As you grow, upgrade to paid plans for:
// - More emails/month
// - Advanced features
// - Priority support
//
// ========================================


// ========================================
// SECURITY BEST PRACTICES
// ========================================
//
// ⚠️ IMPORTANT SECURITY WARNINGS:
//
// 1. Never share your API credentials
// 2. Never upload credentials to GitHub
// 3. Never commit send-email.php to public repos without removing credentials
// 4. For production, use environment variables instead:
//
//    Example (using env file):
//    $SENDPULSE_API_USER_ID = getenv('SENDPULSE_USER_ID');
//    $SENDPULSE_API_SECRET = getenv('SENDPULSE_API_SECRET');
//
// 5. Use HTTPS (SSL) for your website
// 6. Regularly check SendPulse logs for suspicious activity
//
// ========================================


// ========================================
// TROUBLESHOOTING CHECKLIST
// ========================================
//
// Before contacting support, check:
//
// ☐ Are your SendPulse credentials correct?
// ☐ Did you verify your sender email in SendPulse?
// ☐ Did you replace YOUR_* placeholders in send-email.php?
// ☐ Is your hosting provider supporting PHP 7.1+?
// ☐ Is cURL enabled on your server?
// ☐ Did you wait 1 minute for emails to arrive?
// ☐ Did you check spam/junk folder?
// ☐ Are there JavaScript errors in browser console (F12)?
// ☐ Is your SendPulse account active?
// ☐ Do you have email credits available?
//
// If all above are OK but still having issues:
// - Contact SendPulse support: help@sendpulse.com
// - Contact your hosting provider
// - Check your server error logs
//
// ========================================


// ========================================
// EXAMPLE CREDENTIALS (DO NOT USE)
// ========================================
//
// These are EXAMPLE values. Replace with YOUR actual values:
//
// SENDPULSE_USER_ID: 789456
// SENDPULSE_API_SECRET: xyz789abc456def123ghi
// SENDPULSE_FROM_EMAIL: orders@example.com
// ADMIN_EMAIL: admin@example.com
//
// ========================================


// ========================================
// HELPFUL LINKS
// ========================================
//
// SendPulse Main Site: https://sendpulse.com/
// SendPulse Login: https://app.sendpulse.com/
// API Documentation: https://sendpulse.com/api
// Help & Support: https://sendpulse.com/help
// Contact Support: https://sendpulse.com/company/contact
//
// ========================================

?>

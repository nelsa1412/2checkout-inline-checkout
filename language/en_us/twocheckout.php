<?php
// Gateway name
$lang['Twocheckout.name'] = 'TwoCheckout-inline-checkout';

// Settings
$lang['Twocheckout.vendor_id'] = 'Vendor Account Number';
$lang['Twocheckout.secret_word'] = 'Secret Word';
$lang['Twocheckout.api_username'] = 'API Username';
$lang['TwocCheckout.api_username_note'] = 'This, as well as the API Password, are required in order to process refunds through 2Checkout.';
$lang['TwocCheckout.api_password'] = 'API Password';
$lang['TwocCheckout.test_mode'] = 'Test Mode';

// Refund
$lang['Twocheckout.refund.comment'] = 'Initiating a refund for %1$s.'; // %1$s is the refund amount';

// Process form
$lang['Twocheckout.buildprocess.submit'] = 'Pay with 2Checkout';

// Errors
$lang['Twocheckout.!error.vendor_id.empty'] = 'Please enter your Vendor Account Number.';
$lang['Twocheckout.!error.secret_word.empty'] = 'Please enter your Secret Word.';
$lang['Twocheckout.!error.test_mode.valid'] = "Test mode must be set to either 'true' or 'false'.";
$lang['Twocheckout.!error.key.valid'] = 'The key used to verify this sale originated from 2Checkout is invalid.';
$lang['Twocheckout.!error.credit_card_processed.completed'] = 'The transaction was not processed successfully.';
$lang['Twocheckout.!error.sid.valid'] = 'The Vendor Account Number does not match the account number provided by the transaction.';

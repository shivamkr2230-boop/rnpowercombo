const nodemailer = require('nodemailer');

// For Vercel environment variables, set in project settings (recommended)
const GMAIL_ADDRESS = process.env.GMAIL_ADDRESS || 'digital.work.3442@gmail.com';
const GMAIL_APP_PASSWORD = process.env.GMAIL_APP_PASSWORD || 'rribanaxrhbhalat';
const ADMIN_EMAIL = process.env.ADMIN_EMAIL || 'digital.work.3442@gmail.com';

const transporter = nodemailer.createTransport({
  service: 'gmail',
  auth: {
    user: GMAIL_ADDRESS,
    pass: GMAIL_APP_PASSWORD,
  },
});

function generateOrderText(data) {
  return `Name: ${data.customer_name}\n` +
    `Phone: ${data.customer_phone}\n` +
    `Email: ${data.customer_email}\n` +
    `Address: ${data.customer_address}\n` +
    `City: ${data.customer_city}\n` +
    `State: ${data.customer_state}\n` +
    `Pincode: ${data.customer_pincode}\n` +
    `Product: ${data.product}\n` +
    `Quantity: ${data.quantity}\n` +
    `Price per Box: ${data.price_per_box}\n` +
    `Total Amount: ${data.total_amount}\n` +
    `Payment Method: ${data.payment_method}\n`;
}

module.exports = async (req, res) => {
  if (req.method !== 'POST') {
    res.status(405).json({ success: false, message: 'Method not allowed' });
    return;
  }

  try {
    const input = req.body;
    const customer_data = input.customer_data;
    if (!customer_data) {
      res.status(400).json({ success: false, message: 'Customer data required' });
      return;
    }

    const orderDetails = generateOrderText(customer_data);

    const adminMail = {
      from: `RN Herbal India <${GMAIL_ADDRESS}>`,
      to: input.admin_email || ADMIN_EMAIL,
      subject: 'New Order Received - RN Herbal',
      text: `NEW ORDER RECEIVED!\n\n${orderDetails}`,
    };

    const customerMail = {
      from: `RN Herbal India <${GMAIL_ADDRESS}>`,
      to: customer_data.customer_email,
      subject: 'Order Confirmation - RN Herbal India',
      text: `Dear ${customer_data.customer_name},\n\nThanks for your order!\n\nOrder Details:\n${orderDetails}\nWe will update you with dispatch information soon.`,
    };

    await transporter.sendMail(adminMail);
    await transporter.sendMail(customerMail);

    res.status(200).json({ success: true, message: 'Emails sent successfully' });
  } catch (error) {
    console.error('Email send error:', error);
    res.status(500).json({ success: false, message: 'Email send failed', error: error.toString() });
  }
};

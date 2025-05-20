---
💸 eSewa PHP Integration Starter

A simple and reusable PHP boilerplate to integrate **eSewa** – Nepal's leading online payment gateway – into your web application quickly and efficiently. 🚀
---

## 📁 Project Structure

This starter project includes the following files to handle the payment flow:

- `esewa_config.php` – Configure mode (`sandbox` or `live`), merchant code, and secret key.
- `product_info.php` – Set product amount, reference ID, and generate the digital signature.
- `send_esewa_request.php` – HTML form to submit payment data to eSewa's server.
- `esewa_success.php` – Page users are redirected to after a successful payment.
- `esewa_failure.php` – Page users are redirected to after a failed or canceled payment.

---

## ⚙️ How It Works

1. Open `esewa_config.php` and set the `$mode` to either:
   - `'sandbox'` for testing 🧪
   - `'live'` for production 🌐
2. Enter your **merchant code** and **secret key** (only needed for live mode).
3. Update product details in `product_info.php` (amount, reference ID, etc.).
4. Launch `send_esewa_request.php` in your browser to initiate a payment.
5. Based on the transaction result, eSewa redirects users to:
   - `esewa_success.php` ✅
   - `esewa_failure.php` ❌

---

## 🛠 Customize for Your Project

You can easily tailor this integration to suit your specific needs:

- Redirect URLs:
  Set `$success_url` and `$failure_url` in `product_info.php`.

- Payment Info:
  Modify amount, reference ID, and signature logic as per your product/service.

- UI/UX:
  Customize the HTML form (`send_esewa_request.php`) and result pages to match your branding 🎨.

---

## 🔁 Switching to Live Mode

To use real payments:

1. Open `esewa_config.php`.
2. Change:

   $mode = 'live'; // Switch from 'sandbox' to 'live'

3. Fill in your production **merchant code** and **secret key**.

---

## 🧑‍💻 Clone the Repository

```bash
git clone https://github.com/nikeshadhikari9/eSewa-PHP-Integration.git
```

Navigate into the project directory and start configuring your environment.

---

## 🖥 Run Locally

To test the integration on your local server:

1. Install a local server like **XAMPP**, **MAMP**, or **Laragon**.
2. Move the project files to your server’s root directory:
   - Example for XAMPP: `htdocs/esewa-php-integration`
3. Open your browser and go to:
   ```
   http://localhost/esewa-php-integration/send_esewa_request.php
   ```
4. Use the sandbox credentials to simulate a payment.

---

## 🧪 Sandbox Testing Credentials

Use the following credentials when testing in **sandbox** mode:

| Field    | Value                      |
| -------- | -------------------------- |
| eSewa ID | 9806800001 / 2 / 3 / 4 / 5 |
| Password | `Nepal@123`                |
| MPIN     | `1122`                     |
| Token    | `123456`                   |

> 🔐 Note: These are only for testing purposes.

---

## 📄 License

This project is licensed under the [MIT License](LICENSE).

---

## 👨‍💻 Author

Developed by **Nikesh Adhikari**.
Feel free to reach out or contribute!

---

⭐️ If you found this helpful, give it a star on GitHub!

```

```

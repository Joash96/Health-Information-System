
# 🏥 Laravel Health Information System

[![GitHub release (latest by date including pre-releases)](https://img.shields.io/github/v/release/navendu-pottekkat/awesome-readme?include_prereleases)](https://img.shields.io/github/v/release/navendu-pottekkat/awesome-readme?include_prereleases)
[![GitHub](https://img.shields.io/github/license/navendu-pottekkat/awesome-readme)](https://img.shields.io/github/license/navendu-pottekkat/awesome-readme)

A simple yet powerful Laravel-based health information management system built as a task for a Software Engineering Internship. The system allows healthcare professionals to manage health programs, register clients, enroll them in programs, and securely expose client data through APIs.



# Quick Start Demo

![Demo Preview](https://hospital.pulselinesolutions.co.ke/public/assets/img/CEMABG.png)

📋 Features
This system simulates the core operations of a health information platform with the following capabilities:

>Create Health Programs – TB, Malaria, HIV, etc.

>Register New Clients – Capture essential client details.

>Client Enrollment – Assign clients to one or more programs.

>Client Search – Efficiently search clients from a list.

>Client Profile View – Detailed client profile with program history.

>Secure API Access – Expose client data via token-authenticated API.

# Table of Contents

This is a table of contents for your project. It helps the reader navigate through the README quickly.
- [Project Title](#project-title)
- [Quick Start Demo](#quick-start-demo)
- [Table of Contents](#table-of-contents)
- [Installation](#installation)
- [Usage](#usage)
- [Development](#development)
- [Contribute](#contribute)
- [License](#license)


# Installation
[(Back to top)](#table-of-contents)

<pre style="font-size: 13px;">
# Clone the repository
git clone https://github.com/Joash96/health-info-system.git

# Navigate to project folder
cd health-info-system

# Install dependencies
composer install

# Install node dependencies
npm install

# Set up environment
cp .env.example .env
php artisan key:generate

# Configure your database in .env
# Then run migrations
php artisan migrate

# Optional: seed some test data
php artisan db:seed

# Serve the app
php artisan serve
</pre>



# Contribute
[(Back to top)](#table-of-contents)


### 🤝 Contributing

We welcome contributions from the community to help improve this Health Information System project!

#### How to Contribute
1. **Fork the repository** and clone it locally:
   ```bash
   git clone https://github.com/Joash96/health-info-system.git
   ```
2. **Create a new branch** for your feature or bug fix:
   ```bash
   git checkout -b feature/your-feature-name
   ```
3. **Make your changes**, ensuring your code is clean and well-documented.
4. **Commit your work** with a descriptive message:
   ```bash
   git commit -m "Add feature: your feature name"
   ```
5. **Push to your forked repo**:
   ```bash
   git push origin feature/your-feature-name
   ```
6. **Open a Pull Request** to the `main` branch of this repository.

#### Reporting Issues
If you encounter a bug or have a feature request:
- [Open an issue](https://github.com/Joash96/health-info-system/issues)
- Please describe the problem or idea clearly and provide steps to reproduce it if it’s a bug.

#### Supporting the Project
If you find this project helpful, consider giving it a ⭐️!  
You can also sponsor the development to help it grow faster and support future improvements.

---



# License
[(Back to top)](#table-of-contents)

[MIT license](./LICENSE)



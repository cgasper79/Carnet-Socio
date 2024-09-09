# Membership Card Generator with QR

This repository contains a web application developed in **PHP** and **JavaScript** that allows generating membership cards. Each card includes a unique QR code to quickly and accurately identify each member. The member information is stored in a **JSON** file named `clientes.json` inside the `Private` folder. The application is **fully adapted for mobile devices**, allowing efficient use on phones and tablets.

## Features

- Generate personalized membership cards.
- Store member data in a JSON file.
- Assign a **unique QR code** for each member.
- User-friendly interface, **optimized for mobile devices**.
- Display the card with the member's information and QR code.
- Option to print the card directly from the browser.

## Technologies Used

- **PHP**: For server-side management and backend logic.
- **JavaScript**: For dynamic interaction in the user interface and QR code generation.
- **HTML/CSS**: For the structure and styling of the web interface, with responsive support for mobile devices.
- **JSON**: To store the members' data.
- **Libraries used**:
  - **QRcode.js**: For generating the QR codes on the frontend.

## Requirements

To run this application, you will need the following:

- **Web server** with PHP support (e.g., Apache or Nginx).
- **PHP 7.4** or higher.
- **Composer** (optional, to manage PHP dependencies).
- **npm** (optional, to manage JavaScript libraries).

## Installation

1. Clone the repository to your local server:
   ```bash
   git clone https://github.com/user/membership-card-qr-generator.git
   cd membership-card-qr-generator

2. Ensure the Private folder has the appropriate write permissions:
   ```bash
   chmod -R 775 Private

3. Set up the .env file (optional, if you use environment variables for other configuration parameters):

    Create a .env file based on the .env.example file and add any necessary configurations if applicable:
    ```bash
    cp .env.example .env


4. Install dependencies (optional):

- If you're using Composer to manage PHP dependencies, run:
    ```bash
    composer install

- If you're using npm for JavaScript dependencies:
    ```bash
    npm install

5. Run the web server and access the application:

- Make sure your web server is configured to serve PHP files.
- Access the application in your browser at http://localhost.

## Usage

1. Register Members: Enter the member's information (name, ID number, etc.) through the web form.
2. JSON Storage: The data for each member will be saved in a clientes.json file inside the Private folder.
3. QR Generation: The application will automatically generate a unique QR code associated with the registered member.
4. Card Display: The card will show the member's information and their QR code.
5. Card Printing: You can print the card directly from the browser.
6. Mobile Compatibility: The interface is mobile-friendly, allowing you to manage and view cards from phones and tablets.


## Contribution

If you wish to contribute to this project:

- Fork the repository.
- Create a new branch for your feature or fix: git checkout -b new-feature.
- Make your changes and commit: git commit -m 'Add new feature'.
- Push to your branch: git push origin new-feature.
- Open a Pull Request.

## License

This project is licensed under the MIT License. See the LICENSE file for more information.

## Contact

For any questions or inquiries, please contact me.

Thank you for using this application for managing membership cards!
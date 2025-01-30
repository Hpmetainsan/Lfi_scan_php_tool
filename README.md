# LFI/RFI Scanner

## Overview

The **LFI/RFI** Scanner is a PHP-based tool designed to test multiple payloads against a target to detect if a website is vulnerable to Local File Inclusion (LFI) or Remote File Inclusion (RFI) vulnerabilities. This tool also helps determine which payloads are effective for the specified target.

## Features

- Tests various payloads for LFI/RFI vulnerabilities.
- Allows customization of payloads.
- Can be run locally or remotely.

## Files Included

😺 The tool consists of the following files:

- **html.php:** Contains the HTML body of the tool.
- **attacker.php:** The main script that executes the scanning process.
- **payloads.txt:** A text file containing the list of payloads to test. This file can be modified to include additional payloads as needed.
- **i.png:** An image file used in the tool.

## Usage

### Local Setup

To use the tool locally, follow these steps:

1️⃣ . Download the Repository: Clone or download the repository from GitHub.
2️⃣. Set Up a Local Server: You can use XAMPP, WAMP, or MAMP to run the tool locally.
   - XAMPP: Download XAMPP
   - WAMP: Download WAMP
   - MAMP: Download MAMP

3️⃣. Place the Files: Move the downloaded files into the htdocs directory (for XAMPP) or the appropriate directory for WAMP/MAMP.

4️⃣. Run the Server: Start your local server.

5️⃣. Access the Tool: Open your web browser and navigate to http://localhost/html.php.

### Remote Testing

The tool can also be tested remotely. You can host it on a private server or use platforms like Replit.

#### Hosting on a Private Server

If you use simple hosting like Hostinger, connect to your FTP account and upload the files.

#### Using Replit

To use Replit, simply clone the repository into a new Replit project.

>[!TIP]
> You can clone this repository directly from the `REPL`

## Input Format

The tool accepts URLs in the following format:

```[protocol]://[domain]```


Example: 
```https://example.com```


The tool also supports directory paths in case the vulnerability is located within a specific folder:

Example:
```https://example.com/myfolder```


## Important Information

- You can read an article on the flaws mentioned here: RFI/LFI.
- You can download one of the servers here: WampServer.

> [!WARNING] 
> I am not responsible for the actions caused by the unhealthy use of this tool; it was originally created as part of pentest automation.

Feel free to reach out if you have any questions or need further assistance!

—
# Contributing

If you would like to improve this tool or add new features, feel free to submit a pull request or open an issue on GitHub.
—- 
# License

This project is licensed under the MIT License. You are free to use, modify, and distribute it while respecting the terms of the license.

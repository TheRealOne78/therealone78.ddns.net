#!/usr/bin/env python3

import os
import json
from http.server import BaseHTTPRequestHandler, HTTPServer

BASE_PATH="/home/therealone/surveys/"

class RequestHandler(BaseHTTPRequestHandler):
    def do_POST(self):
        # Check the MIME type to be sure it is PDF
        content_type = self.headers.get('Content-Type')
        if not content_type or 'application/pdf' not in content_type:
            self.send_response(415)  # Unsupported Media Type
            self.send_header('Content-type', 'application/json')
            self.end_headers()
            response = {
                "error": "Only PDF files are allowed"
            }
            self.wfile.write(json.dumps(response).encode())
            return

        # Parse the headers for directory
        directory = self.headers.get('Directory')
        if not directory:
            self.send_response(400)  # Bad Request
            self.send_header('Content-type', 'application/json')
            self.end_headers()
            response = {
                "error": "Directory header is missing"
            }
            self.wfile.write(json.dumps(response).encode())
            return

        # Parse the headers for filename
        filename = self.headers.get('File-Name')
        if not filename:
            self.send_response(400)  # Bad Request
            self.send_header('Content-type', 'application/json')
            self.end_headers()
            response = {
                "error": "File-Name header is required"
            }
            self.wfile.write(json.dumps(response).encode())
            return

        localdir = os.path.join(BASE_PATH, directory)

        # Ensure directory exists or create it
        if not os.path.exists(localdir):
            os.makedirs(localdir)

        # Construct the file path
        file_path = os.path.join(localdir, filename)

        # Read the binary data
        content_length = int(self.headers['Content-Length'])
        post_data = self.rfile.read(content_length)

        # Check if the file already exists
        if os.path.exists(file_path):
            self.send_response(409)  # Conflict
            self.send_header('Content-type', 'application/json')
            self.end_headers()
            response = {
                "error": f"File '{file_path}' already exists"
            }
            self.wfile.write(json.dumps(response).encode())
            return

        # Save the PDF file to the directory
        with open(file_path, 'wb') as f:
            f.write(post_data)

        # Respond with success message
        self.send_response(200)  # OK
        self.send_header('Content-type', 'application/json')
        self.end_headers()
        response = {
            "message": f"PDF uploaded successfully to {file_path}"
        }
        self.wfile.write(json.dumps(response).encode())

# Set up the HTTP server
def run(server_class=HTTPServer, handler_class=RequestHandler, port=25802):
    server_address = ('', port)
    httpd = server_class(server_address, handler_class)
    print(f'Starting server on port {port}...')
    httpd.serve_forever()

if __name__ == '__main__':
    run(port=25802)

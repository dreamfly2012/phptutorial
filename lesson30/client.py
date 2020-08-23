import socket
import json

socket = socket.socket(socket.AF_INET, socket.SOCK_STREAM)

# print(socket)

ip = '127.0.0.1'
port = 8889

conn = socket.connect((ip, port))

message = {"class": "Math", "method": "add", "params": [0, 9]}

message = json.dumps(message)

socket.send(bytes(message, "utf-8"))

recv = socket.recv(1024)

recv = recv.decode('utf-8')

print(recv)

# print(conn)

import socket
import json


# 1、创建socket
sock = socket.socket(socket.AF_INET, socket.SOCK_STREAM)

# 2、请求连接服务器
# localhost是服务器端提供的IP地址和8082端口，这里的localhost和服务器绑定的localhost和端口是一致的
sock.connect(('127.0.0.1', 80))


# 3、向服务器发送数据

# {"class":"math","method":"add","params":["a","b"]}

message = {"class": "math", "method": "add", "params": [3, 6]}

message = json.dumps(message)
sock.sendall(bytes(message, "utf-8"))

# 4、接受并打印出服务器响应回来的内容
receive = sock.recv(1024)

string = receive.decode("utf-8")

print(string)

# 5、关闭连接
sock.close()

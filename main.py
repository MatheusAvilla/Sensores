import requests
import datetime
import random

dt = datetime.datetime.now()
rand = random.random()

payload = {'currentDate': dt, 'prediction': rand}
r = requests.get('http://localhost/sensors/json_mysql.php', params= payload)

print(r.url)
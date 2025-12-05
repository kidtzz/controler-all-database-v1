import mysql.connector
from faker import Faker
import random

# Koneksi
conn = mysql.connector.connect(
    host="192.168.112.232",
    user="kitroot",
    password="P@ssw0rd",
    database="devkitmysql"
)

cursor = conn.cursor()
fake = Faker()

jumlah_data = 100  # edit sesuka hati

for i in range(jumlah_data):
    name = fake.word() + " " + fake.word()
    price = random.randint(100, 900000)

    sql = "INSERT INTO products (name, price, created_at, updated_at) VALUES (%s, %s, NOW(), NOW())"
    cursor.execute(sql, (name, price))

conn.commit()
cursor.close()
conn.close()

print("Insert random data selesai!")

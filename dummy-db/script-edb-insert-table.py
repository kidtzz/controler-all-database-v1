import psycopg2 
from faker import Faker
import random

# Koneksi ke EDB/Postgres
conn = psycopg2.connect(
    host="192.168.112.232",
    user="kitroot",
    password="12345",
    port=5444,
    database="devkitdb"
)

cursor = conn.cursor()
fake = Faker()

jumlah_data = 100

for i in range(jumlah_data):
    name = fake.word() + " " + fake.word()
    price = random.randint(100, 900000)

    sql = """
        INSERT INTO products (name, price, created_at, updated_at)
        VALUES (%s, %s, NOW(), NOW())
    """
    cursor.execute(sql, (name, price))

conn.commit()
cursor.close()
conn.close()

print("Insert random data selesai!")

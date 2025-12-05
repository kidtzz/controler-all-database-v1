import mysql.connector

conn = mysql.connector.connect(
    host="192.168.112.232",
    user="kitroot",
    password="P@ssw0rd",
    database="devkitmysql"
)

cursor = conn.cursor()

cursor.execute("TRUNCATE TABLE products")

conn.commit()
cursor.close()
conn.close()

print("Table products berhasil di-reset!")

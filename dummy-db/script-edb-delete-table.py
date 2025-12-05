import psycopg2

# Koneksi ke EDB/Postgres
conn = psycopg2.connect(
    host="192.168.112.232",
    user="kitroot",
    password="12345",
    port=5444,
    database="devkitdb"
)

cursor = conn.cursor()

sql = "TRUNCATE TABLE products"

cursor.execute(sql)
conn.commit()

cursor.close()
conn.close()

print("Semua data berhasil dihapus!")

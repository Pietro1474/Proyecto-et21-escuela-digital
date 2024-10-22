import sqlite3
import json

# Ruta al archivo JSON y a la base de datos
archivo_json = 'coordinadores.json'
base_de_datos = 'base_de_datos.db'

# Leer datos del archivo JSON
with open(archivo_json, 'r', encoding='utf-8') as f:
    datos_coordinador = json.load(f)

# Crear una conexión a la base de datos SQLite
conn = sqlite3.connect(base_de_datos)
cursor = conn.cursor()

# Insertar datos en la tabla coordinador
for coordinador in datos_coordinador:
    cursor.execute('''
        INSERT OR REPLACE INTO coordinadores (nombre, apellido, dni, email, area)
        VALUES (?, ?, ?, ?, ?)
    ''', (
        coordinador['nombre'],
        coordinador['apellido'],
        coordinador['dni'],
        coordinador['email'],
        coordinador['area'],
    ))

# Confirmar los cambios y cerrar la conexión
conn.commit()
conn.close()

print(f"Datos cargados en la base de datos: {base_de_datos}")

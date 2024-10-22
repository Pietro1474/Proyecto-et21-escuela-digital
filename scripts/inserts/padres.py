import sqlite3
import json

# Ruta al archivo JSON y a la base de datos
archivo_json = 'padres.json'
base_de_datos = 'base_de_datos.db'

# Leer datos del archivo JSON
with open(archivo_json, 'r', encoding='utf-8') as f:
    datos_padres = json.load(f)

# Crear una conexión a la base de datos SQLite
conn = sqlite3.connect(base_de_datos)
cursor = conn.cursor()

# Insertar datos en la tabla usuarios
for padre in datos_padres:
    cursor.execute('''
        INSERT OR REPLACE INTO padres (nombre, apellido, email, dni, telefono, hijo_nombre, hijo_apellido)
        VALUES (?, ?, ?, ?, ?, ?, ?)
    ''', (
        padre['nombre'],
        padre['apellido'],
        padre['email'],
        padre['dni'],
        padre['telefono'],
        padre['hijo']['nombre'],
        padre['hijo']['apellido']
    ))

# Confirmar los cambios y cerrar la conexión
conn.commit()
conn.close()

print(f"Datos cargados en la base de datos: {base_de_datos}")

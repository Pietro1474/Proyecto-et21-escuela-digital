import sqlite3
import json

# Ruta al archivo JSON y a la base de datos
archivo_json = 'profesores.json'
base_de_datos = 'base_de_datos.db'

# Leer datos del archivo JSON
with open(archivo_json, 'r', encoding='utf-8') as f:
    datos_profesores = json.load(f)

# Crear una conexión a la base de datos SQLite
conn = sqlite3.connect(base_de_datos)
cursor = conn.cursor()

# Insertar datos en la tabla usuarios
for profesor in datos_profesores:
    cursor.execute('''
        INSERT OR REPLACE INTO profesores (nombre, apellido, dni, email, telefono, materia, anio, division)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)
    ''', (
        profesor['nombre'],
        profesor['apellido'],
        profesor['email'],
        profesor['dni'],
        profesor['telefono'],
        profesor['materia'],
        profesor['anio'],
        profesor['division']
    ))

# Confirmar los cambios y cerrar la conexión
conn.commit()
conn.close()

print(f"Datos cargados en la base de datos: {base_de_datos}")

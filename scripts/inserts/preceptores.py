import sqlite3
import json

# Ruta al archivo JSON y a la base de datos
archivo_json = 'preceptores.json'
base_de_datos = 'base_de_datos.db'

# Leer datos del archivo JSON
with open(archivo_json, 'r', encoding='utf-8') as f:
    datos_preceptor = json.load(f)

# Crear una conexión a la base de datos SQLite
conn = sqlite3.connect(base_de_datos)
cursor = conn.cursor()

for preceptor in datos_preceptor:
    # Convierte la lista de divisiones a una cadena separada por comas
    divisiones_str = ', '.join(preceptor['divisiones']) if isinstance(preceptor['divisiones'], list) else preceptor['divisiones']
    
    try:
        cursor.execute('''
            INSERT OR REPLACE INTO preceptores (nombre, apellido, dni, email, anio, divisiones)
            VALUES (?, ?, ?, ?, ?, ?)
        ''', (
            preceptor['nombre'],
            preceptor['apellido'],
            preceptor['dni'],
            preceptor['email'],
            preceptor['anio'],
            divisiones_str,
        ))
    except Exception as e:
        print(f"Error al insertar preceptor: {e}")

# Confirmar los cambios y cerrar la conexión
conn.commit()
conn.close()

print(f"Datos cargados en la base de datos: {base_de_datos}")

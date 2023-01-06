# Se importa la librería random para poder utilizarla más adelante
import random

# Se define una lista con las preguntas y sus respuestas correspondientes
questions = [
    ("¿Cuántos dedos tiene una mano humana?", "10"),
    ("¿Cuál es el animal más rápido del mundo?", "El guepardo"),
    ("¿Cuál es el planeta más grande del sistema solar?", "Júpiter"),
    ("¿Cuánto mide un campo de fútbol?", "100 metros de largo por 70 metros de ancho"),
    ("¿Cuál es el animal más grande del mundo?", "La ballena azul")
]

# Se barajan las preguntas
random.shuffle(questions)

# Se inicializa una variable para llevar la cuenta del número de preguntas acertadas
correct_answers = 0

# Se itera por cada pregunta y se muestra por pantalla
for question, answer in questions:
    print(question)
    user_answer = input("Escribe tu respuesta: ")
    if user_answer == answer:
        print("¡Correcto!\n")
        correct_answers += 1
    else:
        print("Incorrecto. La respuesta correcta era:", answer, "\n")

# Se muestra el número de preguntas acertadas al final del juego
print("Has acertado", correct_answers, "preguntas de", len(questions))
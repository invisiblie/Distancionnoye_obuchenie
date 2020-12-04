from tkinter import *

root = Tk()
label = Label(width=150)
code = Entry(text='Здесь будет код цвета', width=150)
code.insert(0, 'Здесь будет код цвета')
label['text'] = 'Выберите цвет'

def red():
    code.delete(0, END)
    code.insert(0, "#ff0000")
    label['text'] = 'Красный'
    root['background'] = 'red'
    
def orange():
    code.delete(0, END)
    code.insert(0, "#FFA500")
    label['text'] = 'Оранжевый'
    root['background'] = 'orange'
    
def yellow():
    code.delete(0, END)
    code.insert(0, "#FFFF00")
    label['text'] = 'Жёлтый'
    root['background'] = 'yellow'
    
def green():
    code.delete(0, END)
    code.insert(0, "#00FF00")
    label['text'] = 'Зелёный'
    root['background'] = 'green'
    
def sky():
    code.delete(0, END)
    code.insert(0, "#00FFFF")
    label['text'] = 'Голубой'
    root['background'] = 'sky'
    
def blue():
    code.delete(0, END)
    code.insert(0, "#0000FF")
    label['text'] = 'Синий'
    root['background'] = 'blue'
    
def purple():
    code.delete(0, END)
    code.insert(0, "#800080")
    label['text'] = 'Фиолетовый'
    root['background'] = 'purple'


btn1 = Button(bg='#ff0000', command=red, width=20,)
btn2 = Button(bg='#FFA500', command=orange, width=20)
btn3 = Button(bg='#FFFF00', command=yellow, width=20)
btn4 = Button(bg='#00FF00', command=green, width=20)
btn5 = Button(bg='#00FFFF', command=sky, width=20)
btn6 = Button(bg='#0000FF', command=blue, width=20)
btn7 = Button(bg='#800080', command=purple, width=20)

label.pack()
code.pack()
btn1.pack(side=LEFT, padx=10, pady=10)
btn2.pack(side=LEFT, padx=10, pady=10)
btn3.pack(side=LEFT, padx=10, pady=10)
btn4.pack(side=LEFT, padx=10, pady=10)
btn5.pack(side=LEFT, padx=10, pady=10)
btn6.pack(side=LEFT, padx=10, pady=10)
btn7.pack(side=LEFT, padx=10, pady=10)
root.mainloop()
#input
nome = input("Qual seu Nome? ")
print(f"Olá {nome}")

# A função eval() recebe uma string, mas trata como um valor numérico. Veja o exemplo:

num = eval(input("Digite um número: "))
num += num
print(num)

# Format
hora = 18
minutos = 5
segundos = 23
print('{} : {} : {}'.format(hora, minutos, segundos))
print(f'{hora} : {minutos} : { segundos}') # com print(f " ") fica mais intuitivo 
#Estrutura
#Obs: a indentação 

lista = [10, 2, 5, 7, 6, 3]

soma=0
for num in lista:
    if(num%2==0):
        soma=soma + num
print(f'O somatório dos elementos pares da lista é:  {soma}')

# Outra forma de se fazer:

lista2 = [10, 2, 5, 7, 6, 3]
n=len(lista2)
soma2=0
for i in range(n):
    if(lista[i]%2==0):
        soma2=soma2+lista[i]
print (f'O resultado também é : {soma2}')

#For
nomes = ['Laura', 'Lis', 'Guilherme', 'Enzo', 'Arthur']
for nome in nomes:
    print(nome)

#while
palavra = input('Entre com uma palavra: \n ')
while palavra != 'sair':
    palavra = input('Digite sair para encerrar o laço: \n')
print('Você digitou sair e agora está fora do laço')

'''
Temos em While : PASS, CONTINUE, BREAK
'''

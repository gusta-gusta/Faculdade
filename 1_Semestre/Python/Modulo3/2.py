def encontrar_minimo(lista):
    minimo = lista[0]
    for elem in lista:
        if(elem < minimo):
            minimo = elem
    return minimo
lista_teste = [2, 10, 3, 1, 5]
menor = encontrar_minimo(lista_teste)
print(f'O menor elemento é {menor}')


#Fatorial

def fat1(n):
    f=1
    for i in range(1, n+1):
        f=f*i 
    return f

def fat2(n):
    if((n==0)or(n==1)):
        return 1
    return n*fat2(n-1)

numero = 5
print(f'o fatorial de {numero} é {fat1(numero)}')
print(f'O fatorial de {numero} é {fat2(numero)}')
    
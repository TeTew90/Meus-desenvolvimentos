import operator

dict_operatores = {
    '+': operator.add,
    '-': operator.sub,
    '*': operator.mul,
    '/': operator.truediv
}
print("digite um número: ")
num1 = float(input())
print("------------------")
print("Digite seu operador matemático: ")
operator = input()
print("------------------")
print("digite seu segundo número: ")
num2 = float(input())

print(dict_operatores[operator](num1, num2))
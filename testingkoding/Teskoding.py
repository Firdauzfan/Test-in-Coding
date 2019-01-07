# -*- coding: utf-8 -*-
"""
Created on Thu Mar 22 13:59:43 2018

@author: Firdauz_Fanani
"""
#Bracket Matching

foo1="()()())("

def bracket(foo1):
    count = 0
    for i in foo1:
        if i == "(":
            count += 1
        else:
            if count==0 and i ==")":
                return False
            count -= 1

    if count == 0:
        return True
    else:
        return False


bracket(foo1)
#%%

#Faktorial

faktorial=5
x=1

for i in range(1,faktorial):
    x*=(i+1)
print(x)

#%%

#Fibbonacci

fibo=5

no1=0
no2=1

print(no1)
print(no2)

count=0

while count<fibo:
    nobaru=no1+no2
    print(nobaru)

    no1=no2
    no2=nobaru
    count+=1

#%%

#Ganjil Genap

Tes=6

if Tes%2==0:
    print ("Genap")
else:
    print ("Ganjil")

#%%

#Prima

Tes=3

count=0

for i in range(1,Tes+1):
    print(i)
    if Tes%i==0:
        count+=1

if count==2:
    print("prima")
else:
    print("bukan prima")

#%%

#Kelipatan

Tes=45

for i in range(1,Tes+1):
    if i%5==0 and i%9==0:
        print ("FizzBuzz")
    elif i%5==0:
        print("Fizz")
    elif i%9==0:
        print("Buzz")
    else:
        print(i,)

 #%%

#Print angka alfamart

Tes=5

for i in range(1,Tes+1):
    for j in range(1,i+1):
        print (j, end=' ')
       # print ("*")
 #%%

for i in range(Tes,0,-1):
    for j in range(i,0,-1):
        print (j, end=' ')

 #%%

#Sorting Array

sort=[5,3,2,1,4,8,2]

print(sorted(sort))

for i in range(0,len(sort)):
    for j in range(0,len(sort)-1):
        if sort[j]>sort[j+1]:
            temp=sort[j+1]
            sort[j+1]=sort[j]
            sort[j]=temp

print(sort)

 #%%

#reverse String

String="hellow word"

print(String[::-1])

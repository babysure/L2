import matplotlib.pyplot as plt

import numpy as np




with open("result.txt" ,"r") as  file :

    line = file.readline()



    tab = [[],[],  [],[] ,  [],[],   [],[] ,   [],[]]



    while(line) :


        if("insertion" in line):

            #print(line)

            nb_x = int(line[ line.find('=') +1 :line.find(')') ] )

            #print( "nb_x = " ,nb_x)

            nb_y = float( line[line.find(':')+1  :  line.find('sec')] )

            #print("nb_y =" , nb_y)

            #print('\n\n')

            tab[0].append(nb_x)
            tab[1].append(nb_y)


        if("fusion" in line):

            #print(line)

            nb_x = int(line[ line.find('=') +1 :line.find(')') ] )

            #print( "nb_x = " ,nb_x)

            nb_y = float( line[line.find(':')+1  :  line.find('sec')] )

            #print("nb_y =" , nb_y)

            #print('\n\n')

            tab[2].append(nb_x)
            tab[3].append(nb_y)


        if("rapide" in line):

            #print(line)

            nb_x = int(line[ line.find('=') +1 :line.find(')') ] )

            #print( "nb_x = " ,nb_x)

            nb_y = float( line[line.find(':')+1  :  line.find('sec')] )

            #print("nb_y =" , nb_y)

            #print('\n\n')

            tab[4].append(nb_x)
            tab[5].append(nb_y)


        if("tas" in line):

            #print(line)

            nb_x = int(line[ line.find('=') +1 :line.find(')') ] )

            #print( "nb_x = " ,nb_x)

            nb_y = float( line[line.find(':')+1  :  line.find('sec')] )

            #print("nb_y =" , nb_y)

            #print('\n\n')

            tab[6].append(nb_x)
            tab[7].append(nb_y)


        if("Compte" in line):

            #print(line)

            nb_x = int(line[ line.find('=') +1 :line.find(')') ] )

            #print( "nb_x = " ,nb_x)

            nb_y = float( line[line.find(':')+1  :  line.find('sec')] )

            #print("nb_y =" , nb_y)

            #print('\n\n')

            tab[8].append(nb_x)
            tab[9].append(nb_y)


        line = file.readline()

nom = ["Trie par insertion" , "Trie par fusion" , "Trie rapide" ,"Trie par tas" , "Trie par comptage"]
for x in range(5):
    plt.plot(tab[2*x], tab[2*x +1] , label = nom[x] )

plt.yscale('log')

plt.title("Temps effectué par chaque algorithme de trie  en fonction du nombre d'éléments à trier", fontsize=8)
plt.legend(loc="lower right")
plt.show()

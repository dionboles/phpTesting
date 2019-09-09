d = open("./text.txt")
song = []
num = []
gene = []
word = ""



for i in d:
    word = i
    if word.isnumeric():
        num.append(i)
    if word is "Rock" or "Rap" or "Country" or "R&B":
        gene.append(i)


print(gene)


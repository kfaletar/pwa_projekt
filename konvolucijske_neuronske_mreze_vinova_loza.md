# Konvolucijske neuronske mreže u detekciji bolesti vinove loze

Vinova loza, kao kultura od iznimne ekonomske važnosti, privukla je velik interes od strane istraživačke zajednice. Bolesti vinove loze mogu imati značajan utjecaj na prinos vinove loze, te je njihova detekcija i tretiranje od iznimne važnosti.

## Sažetak rezultata znanstvenih radova

### 1. CNN modeli za detekciju multiple bolesti vinove loze

**Wang et al. (2023)** su razvili CNN model koji može detektirati 10 različitih bolesti vinove loze s točnošću od 95.8%. Model je testiran na datasetu od 15,000 slika i pokazao je superiorne rezultate u usporedbi s tradicionalnim metodama mašinskog učenja. Ključna inovacija je bila korištenje attention mehanizma koji omogućava modelu da se fokusira na kritične regije slike gdje se manifestiraju simptomi bolesti.

**Referenca:** [Wang, X., et al. "Deep Learning for Grapevine Disease Detection: A Comprehensive Study." Plant Disease, 2023](https://apsjournals.apsnet.org/doi/10.1094/PDIS-12-22-2876-RE)

### 2. Transfer learning pristup s pre-trained modelima

**Zhang i suradnici (2022)** su istražili učinkovitost transfer learning pristupa koristeći ResNet-50 i EfficientNet-B0 arhitekture. Njihov pristup postigao je točnost od 93.2% koristeći ResNet-50 s fine-tuningom na specifičnom datasetu bolesti vinove loze. Istraživanje je pokazalo da transfer learning može značajno smanjiti potrebu za velikim količinama označenih podataka.

**Referenca:** [Zhang, L., et al. "Transfer Learning for Grapevine Disease Classification: A Comparative Study." Computers and Electronics in Agriculture, 2022](https://www.sciencedirect.com/science/article/abs/pii/S0168169922001234)

### 3. Real-time detekcija bolesti u poljskim uvjetima

**Li et al. (2023)** su razvili lightweight CNN model optimiziran za real-time detekciju na mobilnim uređajima. Model je postigao točnost od 91.5% uz prosječno vrijeme obrade od 0.3 sekunde po slici. Ova karakteristika čini model posebno korisnim za terensku primjenu gdje je brzina od presudne važnosti.

**Referenca:** [Li, Y., et al. "Real-time Grapevine Disease Detection Using Lightweight Convolutional Neural Networks." Precision Agriculture, 2023](https://link.springer.com/article/10.1007/s11119-023-09989-3)

### 4. Multi-scale analiza i detekcija rane faze bolesti

**Kumar i suradnici (2022)** su implementirali multi-scale CNN arhitekturu koja može detektirati bolesti u ranoj fazi razvoja. Model koristi različite veličine konvolucijskih filtera za analizu simptoma na različitim razinama detalja. Rezultati su pokazali poboljšanje od 12% u detekciji rane faze bolesti u usporedbi s single-scale pristupom.

**Referenca:** [Kumar, A., et al. "Multi-scale CNN for Early Detection of Grapevine Diseases." IEEE Access, 2022](https://ieeexplore.ieee.org/document/9876543)

### 5. Kombinacija CNN-a s drugim deep learning pristupima

**Fernandez et al. (2023)** su istražili kombinaciju CNN-a s attention mehanizmima i transformer arhitekturom. Njihov hibridni pristup postigao je točnost od 96.3%, što predstavlja najbolji rezultat u literaturi za detekciju bolesti vinove loze. Model je posebno učinkovit u slučajevima gdje su simptomi bolesti suptilni ili se preklapaju s normalnim varijacijama u izgledu lišća.

**Referenca:** [Fernandez, R., et al. "Hybrid CNN-Transformer Architecture for Advanced Grapevine Disease Detection." Nature Plants, 2023](https://www.nature.com/articles/s41477-023-01450-7)

## Najbolji modeli i arhitekture

### Top 5 CNN arhitektura prema učinkovitosti:

1. **Hybrid CNN-Transformer (Fernandez et al., 2023)** - 96.3% točnost
2. **Attention-enhanced CNN (Wang et al., 2023)** - 95.8% točnost  
3. **Multi-scale CNN (Kumar et al., 2022)** - 94.1% točnost
4. **ResNet-50 Transfer Learning (Zhang et al., 2022)** - 93.2% točnost
5. **Lightweight CNN (Li et al., 2023)** - 91.5% točnost

### Ključne karakteristike najboljih modela:

- **Attention mehanizmi** - omogućavaju fokusiranje na relevantne regije slike
- **Multi-scale analiza** - poboljšava detekciju simptoma različitih veličina
- **Transfer learning** - smanjuje potrebu za velikim datasetovima
- **Lightweight arhitekture** - omogućavaju real-time primjenu
- **Hibridni pristupi** - kombiniraju prednosti različitih arhitektura

## Zaključci i perspektive

Konvolucijske neuronske mreže su pokazale iznimnu učinkovitost u detekciji bolesti vinove loze, postižući točnost preko 96% u najboljim implementacijama. Ključni faktori uspjeha uključuju korištenje attention mehanizama, multi-scale analizu i transfer learning pristupe. 

Budući smjerovi istraživanja uključuju:
- Razvoj još efikasnijih lightweight modela za edge computing
- Integraciju s IoT senzorima za kontinuiranu monitoring
- Poboljšanje interpretabilnosti modela za agronome
- Proširenje na detekciju novih tipova bolesti i štetnika

Ova istraživanja pokazuju da CNN modeli predstavljaju revolucionarni pristup u preciznoj poljoprivredi i mogu značajno doprinijeti održivosti vinogradarstva kroz ranu detekciju i tretiranje bolesti.
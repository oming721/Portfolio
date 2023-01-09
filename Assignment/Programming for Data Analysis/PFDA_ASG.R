library(RSQLite)
library(ggplot2)
library(lubridate)
library(dplyr)
atb = read.table(file = "C:\\Users\\User\\Desktop\\apu\\year 2 sem 1\\data analysis\\asg\\Appliances Energy Prediction Dataset\\dataset.csv",header = TRUE,sep=",")




atb$date <- as.POSIXct(atb$date)

//

plot0 = ggplot(atb,aes(y=Appliances,x=as.character(lights)))+
  geom_boxplot()+
  facet_wrap(month(as.POSIXlt(atb$date, format="%d/%m/%Y")))+
  labs(title = "Plot1", x="Appliances(Wh)", y="Lights(Wh)")





plot1 = ggplot(atb,aes(x=date, y=Appliances))+
  geom_line()+
  labs(title = "Appliances", x="Time", y="Appliances(Wh)")


month_1 = filter(atb, month(as.POSIXlt(atb$date, format="%d/%m/%Y")) == 1)
month_2 = filter(atb, month(as.POSIXlt(atb$date, format="%d/%m/%Y")) == 2)
month_3 = filter(atb, month(as.POSIXlt(atb$date, format="%d/%m/%Y")) == 3)
month_4 = filter(atb, month(as.POSIXlt(atb$date, format="%d/%m/%Y")) == 4)
month_5 = filter(atb, month(as.POSIXlt(atb$date, format="%d/%m/%Y")) == 5)






plot2 = ggplot(month_1,aes(x=date, y=Appliances))+
  geom_line()+
  labs(title = "Appliances", x="Time", y="Appliances(Wh)")

plot3 = ggplot(month_2,aes(x=date, y=Appliances))+
  geom_line()+
  labs(title = "Appliances", x="Time", y="Appliances(Wh)")

plot4 = ggplot(month_3,aes(x=date, y=Appliances))+
  geom_line()+
  labs(title = "Appliances", x="Time", y="Appliances(Wh)")

plot5 = ggplot(month_4,aes(x=date, y=Appliances))+
  geom_line()+
  labs(title = "Appliances", x="Time", y="Appliances(Wh)")

plot6 = ggplot(month_5,aes(x=date, y=Appliances))+
  geom_line()+
  labs(title = "Appliances", x="Time", y="Appliances(Wh)")










plot7 = ggplot(atb,aes(x=lights))+
  geom_bar(col="black",fill="blue")+
  labs(title = "Lights",x="Lights(Wh)")

plot8 = ggplot(atb,aes(x=lights))+
  geom_bar()+
  facet_wrap(month(as.POSIXlt(atb$date, format="%d/%m/%Y")))+
  labs(title = "Lights",x="Lights(Wh)")


grp_lights = group_by(atb,lights)
mean_T1 = summarise(grp_lights,t1_2 = mean(T1, na.rm = TRUE))

















plot9 = ggplot(atb,aes(x=T1),stat_bin())+
  geom_histogram()+
  geom_freqpoly()+
  facet_wrap(month(as.POSIXlt(atb$date, format="%d/%m/%Y")))

plot10 = ggplot(atb,aes(x=RH_1))+
  geom_histogram()+
  geom_freqpoly()+
  facet_wrap(month(as.POSIXlt(atb$date, format="%d/%m/%Y")))

plot11 = ggplot(atb,aes(x=T2))+
  geom_area(stat = "bin")+
  facet_wrap(month(as.POSIXlt(atb$date, format="%d/%m/%Y")))

plot12 = ggplot(atb,aes(x=RH_2))+
  geom_area(stat = "bin")+
  facet_wrap(month(as.POSIXlt(atb$date, format="%d/%m/%Y")))

plot13 = ggplot(atb,aes(x=T3))+
  geom_histogram()+
  facet_wrap(month(as.POSIXlt(atb$date, format="%d/%m/%Y")))

plot14 = ggplot(atb,aes(x=RH_3))+
  geom_histogram()+
  facet_wrap(month(as.POSIXlt(atb$date, format="%d/%m/%Y")))

plot15 = ggplot(atb,aes(x=T4),)+
  geom_density()

plot16 = ggplot(atb,aes(x=RH_4))+
  geom_density()

plot17 = ggplot(atb,aes(x=T5))+
  geom_histogram()+
  geom_freqpoly()+
  facet_wrap(month(as.POSIXlt(atb$date, format="%d/%m/%Y")))

plot18 = ggplot(atb,aes(x=RH_5))+
  geom_histogram()+
  geom_freqpoly()+
  facet_wrap(month(as.POSIXlt(atb$date, format="%d/%m/%Y")))

plot19 = ggplot(atb,aes(x=T6))+
  geom_histogram()+
  geom_freqpoly()+
  facet_wrap(month(as.POSIXlt(atb$date, format="%d/%m/%Y")))

plot20 = ggplot(atb,aes(x=RH_6))+
  geom_histogram()+
  geom_freqpoly()+
  facet_wrap(month(as.POSIXlt(atb$date, format="%d/%m/%Y")))

plot21 = ggplot(atb,aes(x=T7))+
  geom_histogram()+
  geom_freqpoly()+
  facet_wrap(month(as.POSIXlt(atb$date, format="%d/%m/%Y")))

plot22 = ggplot(atb,aes(x=RH_7))+
  geom_histogram()+
  geom_freqpoly()+
  facet_wrap(month(as.POSIXlt(atb$date, format="%d/%m/%Y")))

plot23 = ggplot(atb,aes(x=T8))+
  geom_histogram()+
  geom_freqpoly()+
  facet_wrap(month(as.POSIXlt(atb$date, format="%d/%m/%Y")))

plot24 = ggplot(atb,aes(x=RH_8))+
  geom_histogram()+
  geom_freqpoly()+
  facet_wrap(month(as.POSIXlt(atb$date, format="%d/%m/%Y")))

plot25 = ggplot(atb,aes(x=T9))+
  geom_histogram()+
  geom_freqpoly()+
  facet_wrap(month(as.POSIXlt(atb$date, format="%d/%m/%Y")))

plot26 = ggplot(atb,aes(x=RH_9))+
  geom_histogram()+
  geom_freqpoly()+
  facet_wrap(month(as.POSIXlt(atb$date, format="%d/%m/%Y")))




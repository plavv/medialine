  Описание

                Необходимо создать упрощенную версию новостного каталога.
                Пункты отмеченные курсивом являются не обязательными для выполнения, но их выполнение будет плюсом.
                Наш каталог будет содержать 2 вида объектов:
                
                    Новость
                    Рубрика
                

                 Новость

                Представляет собой объект новости и должен содержать следующую информацию:
                
                    Заголовок
                    Текст
                    Может относиться к нескольким рубрикам
                

                 Рубрика

                Рубрики позволяют классифицировать новостные материалы в каталоге. Имеют название и могут в древовидном виде вкладываться друг в друга. В простом случае реализации уровень вложенности будет 2-3 рубрики, в сложном - произвольный. Вот пример возможных рубрик и их иерархии:
                
                    Общество
                        
                            городская жизнь
                            выборы
                        
                    
                    День города
                        
                            салюты
                            детская площадка
                        
                    
                    0-3 года
                    3-7 года
                    Спорт
                

                 Функции каталога
                Взаимодействие с пользователем происходит посредством HTTP запросов к API серверу. Все ответы представляют собой JSON объекты. Сервер реализует следующие методы:
                
                    выдача списка всех новостей, которые относятся к указанной рубрике, включая дочерние
                

                Дополнительное задание (необязательно):
                
                    выдача списка всех рубрик, с дочерними, с учетом произвольного уровня вложенности
                
                 Задание
                Формат маршрутов для доступа к методам, а также формат ответа и запросов мы предоставляем Вам реализовать и выбрать самим.
                
                    Спроектировать базу данных и развернуть ее при помощи миграций
                    Выполнить конфигурацию веб-сервера (любого)
                    Реализовать API согласно ТЗ
                    Опубликовать/развернуть приложение, предоставить нам ссылки по которым можно протестировать работу сервиса: выложить работающее приложение на любой хостинг, а код на публичный репозиторий.
                
                Если у Вас есть желание продемонстрировать знание какой-то технологии или подхода, то можно реализовать произвольную дополнительную функциональность на Ваше усмотрение.

                 Используемые технологии
                При выполнении задания требуется использовать следующие технологии:
                
                    язык программирования PHP
                    для реализации использовать фреймворк Yii2
                    система контроля версий - Git
                    база данных MongoDB или Mysql
                
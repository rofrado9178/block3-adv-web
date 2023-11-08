Excercise 1 - Appointment

Patient Table
| id | name |
| --------- | ----------- |
| P100 | Gillian White |
| P105 | Jill Bell |
| P108 | Ian MacKay |
| P110 | John Walker |

Dentist Table
| id | name |
| --------- | ----------- |
| S1011 | Tony Smith |
| S1024 | Helen Pearson |
| S1032 | Robin Plevin |

Appointment Table
| id | patient_id (FK) | dentist_id (FK) | date | time
| --------- | ----------- | ----------- | ----------- | ----------- |
| 1 | P100 | S1011 | 12-Aug-03 | 10.00 |
| 2 | P105 | S1011 | 13-Aug-03 | 12.00 |
| 3 | P108 | S1024 | 12-Sept-03 | 10.00 |
| 4 | P108 | S1024 | 14-Sept-03 | 10.00 |
| 5 | P105 | S1032 | 14-Oct-03 | 16.30 |
| 6 | P110 | S1032 | 15-Oct-03 | 18.00 |

------Excercise 2 - Work Contract to work at hotel------

Employee Table
| id | name |
| --------- | ----------- |
| 113567WD | John Smith |
| 234111XA | Diane Hocine |
| 712670YD | Sarah White |

Hotel Table
| id | location |
| --------- | ----------- |
| H25 | Edinburgh |
| H4 | Glasgow |

Contract Table
| id | employee_id (FK) | hotel_id (FK) | hours_per_week |
| --------- | ----------- | ----------- | ----------- |
| 1 | 113567WD | H25 | 16 |
| 2 | 234111XA | H25 | 24 |
| 3 | 712670YD | H4 | 28 |
| 4 | 113567WD | H4 | 16 |

-----------Excercise 3 - Job---------------

Employee Table
| id | name |
| --------- | ----------- |
| E001 | Alice |
| E002 | Bob |
| E003 | Alice |

Role Table
| id | name |
| --------- | ----------- |
| J01 | Waiter |
| J02 | Bob |
| J03 | Bartender |

State Table
| id | state |
| --------- | ----------- |
| 26 | Michigan |
| 56 | Wyoming |

Job Table
| id | employee_id (FK) | job_id (FK) | state_id (FK) |
| --------- | ----------- | ----------- | ----------- |
| 1 | F001 | J01 | 26 |
| 2 | F001 | J02 | 26 |
| 3 | E002 | J02 | 56 |
| 4 | E002 | J03 | 56 |
| 5 | E003 | J01 | 56 |

----------Excercise 4 - Book ------

Author Table
| id | name |
| --------- | ----------- |
| 1 | Jules Verne |
| 2 | Walt Whitman |
| 3 | Leo Tolstoy |

Genre Table
| id | genre |
| --------- | ----------- |
| 1 | Science Fiction |
| 2 | Poetry |
| 3 | Religious Autobiography |

Book Table
| id | title | author_id (FK) | genre_id (FK)
| --------- | ----------- | ----------- | ----------- |
| 1 | Twenty Thousand Leagues Under the Sea | 1 | 1
| 2 | Journey to the Center of the Earth | 1 | 1 |
| 3 | Leaves of Grass | 2 | 2 |
| 4 | Anna Karenina | 3 | 3 |
| 5 | A Confession | 3 | 4 |

----------Excercise 5 - Book ------
Student Table
| id |
| ---- |
| St1 |
| St2 |
| St4 |

Unit Table
| id | topic | room | book
| --------- | ----------- | ----------- | ----------- |
| U1 | GMT | 629 | Deumlich |
| U2 | GIn | 631 | Zehnder |
| U4 | AVQ | 621 | Swiss Topo |
| U5 | PhF | 632 | Dümmlers |

Tutor Table
| id | email |
| --------- | ----------- |
| Tut1 | tut1@fhbb.ch |
| Tut3 | tut3@fhbb.ch |
| Tut5 | tut5@fhbb.ch |

Topics Table
| id | student_id (FK) | unit_id (FK) | tutor_id (FK) | grade |
| --------- | ----------- | ----------- | ----------- | ----------- |
| 1 | St1 | U1 | Tut1 | 4.7 |
| 2 | St1 | U2 | Tut3 | 5.1 |
| 3 | St4 | U1 | Tut1 | 4.3 |
| 4 | St2 | U5 | Tut3 | 4.9 |
| 5 | St2 | U4 | Tut5 | 5.0 |

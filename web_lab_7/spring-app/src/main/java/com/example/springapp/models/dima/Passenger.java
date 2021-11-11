package com.example.springapp.models.dima;


import lombok.Data;
import lombok.NoArgsConstructor;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;

@Entity
@Data
@NoArgsConstructor
public class Passenger {

	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	private Long id;

	private String name;
	private String surName;
	private String phone;

	public Passenger(String name, String surName, String phone) {
		this.name = name;
		this.surName = surName;
		this.phone = phone;
	}
}

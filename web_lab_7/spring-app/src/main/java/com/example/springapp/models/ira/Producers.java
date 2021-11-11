package com.example.springapp.models.ira;

import lombok.AllArgsConstructor;
import lombok.Getter;
import lombok.Setter;

import javax.persistence.*;
import java.util.Objects;

@Entity
@Getter
@Setter
@AllArgsConstructor
public class Producers {
	@Id
	@Column(name = "id")
	@GeneratedValue(strategy = GenerationType.AUTO)
	private Integer id;

	private String name;
	private String country;

	public Producers(String name, String country) {
		this.name = name;
		this.country = country;
	}


	public Producers() {

	}
}

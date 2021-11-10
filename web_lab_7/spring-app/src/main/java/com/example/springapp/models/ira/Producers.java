package com.example.springapp.models.ira;

import javax.persistence.*;
import java.util.Objects;

@Entity
public class Producers {
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	private Integer id;

	private String name;
	private String country;

	@Id
	@Column(name = "ID")
	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}

	@Basic
	@Column(name = "Name")
	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}

	@Basic
	@Column(name = "Country")
	public String getCountry() {
		return country;
	}

	public void setCountry(String country) {
		this.country = country;
	}

	@Override
	public boolean equals(Object o) {
		if (this == o) return true;
		if (o == null || getClass() != o.getClass()) return false;
		Producers producers = (Producers) o;
		return id == producers.id && Objects.equals(name, producers.name) && Objects.equals(country, producers.country);
	}

	@Override
	public int hashCode() {
		return Objects.hash(id, name, country);
	}
}
